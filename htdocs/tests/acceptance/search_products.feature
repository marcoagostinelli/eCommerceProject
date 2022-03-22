Feature: search_products
  In order to Find the product I'm looking for
  As a client
  I need to type the name of the product I'm looking for

  Scenario: try search_products
    Given I have a product in mind to buy
    When I go to "search products" text box
    And type in the product I'm looking for
    Then the product should be displayed on the screen if the store has it