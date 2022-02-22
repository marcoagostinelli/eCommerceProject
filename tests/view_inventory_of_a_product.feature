Feature: view_inventory_of_a_product
  In order to view how much inventory is left for a product
  As a seller
  I need to indicate the quantity in the amount label

  Scenario: try list_products
    Given I have a product that I want to sell
    When a customer buys an item
    Then I must update the quantity of my stock