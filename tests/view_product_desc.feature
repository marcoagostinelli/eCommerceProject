Feature: view_product_desc
  In order to view the description of a product
  As a client
  I need to Select the product I'm interested in

  Scenario: try view_product_desc
    Given the product I want to see
    When I'm browsing through the website
    And I click on the product 
    Then I see the product description