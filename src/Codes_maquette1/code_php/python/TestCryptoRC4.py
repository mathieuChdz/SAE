import codage
import decodage
import unittest


class Test_RC4(unittest.TestCase):

    def test_codage(self):
        """Test la fonction de chiffrement d'un message chiffre avec le chiffrement RC4."""

        clef = ['Key', 'Wiki', 'Secret', 'Key', 'The Key', 'The Key']
        message = ['Plaintext', 'pedia', 'Attack at dawn', 'The Message', 'Message', 'The Message3']
        message_code = [['bb', 'f3', '16', 'e8', 'd9', '40', 'af', '0a', 'd3'], ['10', '21', 'bf', '04', '20'],
                        ['45', 'a0', '1f', '64', '5f', 'c3', '5b', '38', '35', '52', '54', '4b', '9b', 'f5'],
                        ['bf', 'f7', '12', 'a1', 'fa', '51', 'b9', '01', 'c6', '7e', '2f'],
                        ['8f', '2d', '6a', '11', 'c6', '87', '09'],
                        ['96', '20', '7c', '42', 'ea', '85', '1f', '40', 'b8', '4e', '57', 'ef']]

        for i in range(len(clef)):
            self.assertEqual(codage.codage(clef[i], message[i]), message_code[i])


    # def test_decodage(self):
    #     """Test la fonction de dechiffrement d'un message chiffre avec le chiffrement RC4"""
    #
    #     clef = ['Key', 'Wiki', 'Secret', 'Key', 'The Key', 'The Key']
    #     message = ['Plaintext', 'pedia', 'Attack at dawn', 'The Message', 'Message', 'The Message3']
    #     message_code = [['bb', 'f3', '16', 'e8', 'd9', '40', 'af', '0a', 'd3'], ['10', '21', 'bf', '04', '20'],
    #                     ['45', 'a0', '1f', '64', '5f', 'c3', '5b', '38', '35', '52', '54', '4b', '9b', 'f5'],
    #                     ['bf', 'f7', '12', 'a1', 'fa', '51', 'b9', '01', 'c6', '7e', '2f'],
    #                     ['8f', '2d', '6a', '11', 'c6', '87', '09'],
    #                     ['96', '20', '7c', '42', 'ea', '85', '1f', '40', 'b8', '4e', '57', 'ef']]
    #
    #     for i in range(len(clef)):
    #         self.assertEqual(decodage.decodage(clef[i], message_code[i]), message[i])


if __name__ == '__main__':
    unittest.main()

