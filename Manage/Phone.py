import re

class Phone:
    def __init__(self, tele: str):
        if not(isinstance(tele, str)):
            raise ValueError

        self.tele = tele
        self.area, self.number = self.phoneSplit()
        if not(self.area or self.number):
            raise ValueError

    def phoneSplit(self):
        """
        since telephone number is more of a weak type, not going to create an entire class
        """

        phone_re = re.compile("(?P<acode>^[0-9]{3})-?(?P<num>[0-9]{3}-?[0-9]{4})")
        match = phone_re.match(self.tele)
        return [match.group("acode"), match.group("num")] if match else [None, None]

