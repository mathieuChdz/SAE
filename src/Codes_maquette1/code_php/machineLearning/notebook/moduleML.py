import pandas as pan
import requests
import csv
from joblib import load
import json
from bs4 import BeautifulSoup

def ml_exec():

    response = requests.get("https://www.ft.com/global-economy")
    # Si response renvoie <Response 200> la requête à bien fonctionner et la variable response contient
    # la page web correspondant à l'url.
    # En revanche <Response 404> indique une erreur.

    soup = BeautifulSoup(response.content, 'html.parser')
    # Normalement, on devrait avoir récupérer les données du site du Financial Times

    tag_a = soup.find_all("a", class_="js-teaser-heading-link")

    phrases_web = [['Phrases']]
    for j in range(len(tag_a) - 2):
      phrases_web.append(tag_a[j].contents)
    # Ici on rassemble les phrases qu'on vient d'identifier dans un tableau


    for l in range(len(phrases_web)):
      phrases_web[l][0] = str(phrases_web[l][0])
    type(phrases_web[0][0])
    # Le type de nos phrases est un type propre à la librairie BeautifulSoup.
    # On convertit les phrases en objet de type string pour éviter d'éventuels problème lors de l'écriture en csv.


    with open("/var/www/html/machineLearning/data/web.csv", "w", newline='', encoding='utf-8') as csvfile:
      writer = csv.writer(csvfile, delimiter=',')
      writer.writerows(phrases_web)
   
    # Récupération des phrases scrapées
    dataframe_web = pan.read_csv("/var/www/html/machineLearning/data/web.csv")

    model = load("/var/www/html/machineLearning/notebook/model.LogiR")

    predictions = model.predict(dataframe_web.Phrases)

    return [dataframe_web["Phrases"].tolist(),predictions.tolist()]

if __name__ == '__main__':
    res = ml_exec()
    json_values = json.dumps(res)
    print(json_values)
