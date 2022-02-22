Feature: remove_products
  In order to remove a product
  As a seller
  I need to remove my product from being visible by clients

  Scenario: try remove_products
    Given I have a product I want to remove
    When I go to "remove products"
    And I select the product I want to remove
    Then the product should not be visible anymore to clients
