Feature: list_products
  In order to list a product
  As a seller
  I need to make my products avalable for everyone to see

  Scenario: try list_products
    Given I have a product that I want to sell
    When I go to "add product" as a seller
    And input all the details of my new product
    Then the product should be avalable for all clients to see