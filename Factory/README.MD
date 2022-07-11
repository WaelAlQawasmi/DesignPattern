# Factory pattern
Factory pattern is one of the most used design patterns in Java.
This type of design pattern comes under creation
pattern as this pattern provides one of the best ways to create an object.

In Factory pattern, we create object without exposing 
the creation logic to the client and refer to newly created object 
using a common interface.
- __in this project  I create  two version of the project with interface and with superclass__
## How the project work?
1. the products (A&B) inherit from products(superclass of interface)
2. the factory return instance based what instance you need
3. by create instance form products and call the factory methode that return the instance by select the instance that you need

## references
1. [Factory Design Pattern](https://www.youtube.com/watch?v=BNANUSPIu0c&list=PLZeX1aIDYSn8qNDPcqwyvOtGZkMQwPjCg&index=4)
2. [tutorialspoint](https://www.tutorialspoint.com/design_pattern/factory_pattern.htm)