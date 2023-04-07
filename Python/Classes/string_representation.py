class Circle:
  pi = 3.14

  def __init__(self, diameter):
    self.radius = diameter / 2

  def area(self):
    return self.pi * self.radius ** 2

  def circumference(self):
    return self.pi * 2 * self.radius

  # default string representation gives us some information, like where the class is defined and our computer’s memory address
  # __repr__() can only have one parameter, self, and must return a string.
  def __repr__(self):
    return (f"Circle with radius {self.radius}")


medium_pizza = Circle(12)
teaching_table = Circle(36)
round_room = Circle(11460)

print(medium_pizza)
print(teaching_table)
print(round_room)
