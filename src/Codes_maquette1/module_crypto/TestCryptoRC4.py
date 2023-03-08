from CryptoRC4 import *
from unittest import *


class Test_RC4(TestCase):

    def test_codage(self):
        """Test la fonction de chiffrement d'un message chiffre avec le chiffrement RC4."""

        clef = ['Key', 'Wiki', 'Secret']
        message = ['Plaintext', 'pedia', 'Attack at dawn']
        message_code = [['bb', 'f3', '16', 'e8', 'd9', '40', 'af', 'a', 'd3'], ['10', '21', 'bf', '4', '20'],
                        ['45', 'a0', '1f', '64', '5f', 'c3', '5b', '38', '35', '52', '54', '4b', '9b', 'f5']]

        for i in range(len(clef)):
            self.assertEqual(codage(clef[i], message[i]), message_code[i])


    def test_decodage(self):
        """Test la fonction de dechiffrement d'un message chiffre avec le chiffrement RC4"""

        clef = ['Key', 'Wiki', 'Secret']
        message = ['Plaintext', 'pedia', 'Attack at dawn']
        message_code = [['bb', 'f3', '16', 'e8', 'd9', '40', 'af', 'a', 'd3'], ['10', '21', 'bf', '4', '20'],
                        ['45', 'a0', '1f', '64', '5f', 'c3', '5b', '38', '35', '52', '54', '4b', '9b', 'f5']]

        for i in range(len(clef)):
            self.assertEqual(decodage(clef[i], message_code[i]), message[i])


if __name__ == '__main__':
    main()
    