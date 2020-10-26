from Manage.Phone import Phone

class Professor:
    def __init__(self, ssn: int, name: str,
                 address: str, tele: Phone, sex: str, title: str,
                 salary: int, degrees: list
                ):

            """
            make type checking?
            """
            self.ssn = ssn
            self.name = name
            self.address = address
            self.tele = tele
            self.sex = sex
            self.title = title
            self.salary = salary
            self.degrees = degrees

    def unpackable(self):
        """
        get all attributes from a class programatically
        """

        return list(self.__dict__.values())

