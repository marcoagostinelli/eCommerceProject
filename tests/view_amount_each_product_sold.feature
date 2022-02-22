Feature: view_amount_each_product_sold
  In order to view how many of each product has been sold
  As a seller
  I need to check in my account

  Scenario: try view_amount_each_product_sold
    Given I have 3 products that were purchased
    When I go to my account's transactions
    Then I will see each product with the amount of purchased