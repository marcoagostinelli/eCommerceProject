Feature: add_to_cart
  In order to add a product to my cart
  As a client
  I need to select a product and click a button to add it to cart

  Scenario: try add_to_cart
    Given a webpage with multiple products
    When I search for what I'm looking for
    Then I should click "add to cart" on the product I want
    And it should get added to my cart