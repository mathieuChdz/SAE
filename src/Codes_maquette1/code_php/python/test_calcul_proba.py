from unittest import TestCase
from calcul_proba import*


class Test(TestCase):

    def test_norm(self):
        self.assertEqual(float(format(norm(90, 3, 87),'.4f')), 0.0807)


    def test_rectangle_m(self):
        self.assertEqual(float(format(rectangleM(100000, -1000, 87, 90, 3), '.4f')), 0.1582)
        self.assertEqual(rectangleM(100000, -1000, 0, 0, -3), "valeur interdite")
        self.assertEqual(rectangleM(100000, -1000, -87, -90, 0), "valeur interdite")


    def test_trapeze(self):
        self.assertEqual(float(format(trapeze(100000, -1000, 87, 90, 3), '.4f')), 0.1587)
        self.assertEqual(trapeze(100000, -1000, 0, 0, -3), "valeur interdite")
        self.assertEqual(trapeze(100000, -1000, -87, -90, 0), "valeur interdite")



    def test_simpson(self):
        self.assertEqual(float(format(simpson(100000, -1000, 87, 90, 3), '.4f')), 0.1582)
        self.assertEqual(simpson(100000, -1000, 0, 0, -3), "valeur interdite")
        self.assertEqual(simpson(100000, -1000, -87, -90, 0), "valeur interdite")


