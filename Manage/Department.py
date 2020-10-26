from Manage.Phone import Phone

class Department:
    def __init__(self, identfier: int, name: str, tele: Phone, location: str, chairPerson: str):
        self.identifier = int
        self.tele = tele
        self.location = location
        self.chair = chairPerson


    def unpackable(self):
        """
        get all attributes from a class programatically
        """

        return list(self.__dict__.values())

