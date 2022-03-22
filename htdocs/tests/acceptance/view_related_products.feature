Feature: view_related_products
  In order to view related products
  As a client
  I need to select a product

  Scenario: try view_related_products
    Given I have selected a product
    When I scroll down all the way at the bnottom of the page
    Then I should see some related products