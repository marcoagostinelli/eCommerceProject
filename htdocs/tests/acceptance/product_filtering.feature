Feature: product_filtering
  In order to filter a product
  As a client
  I need to select the options depending on the product

  Scenario: try product_filtering
    Given I have searched a product
    When I go on the filtering options
    And select a brand or model
    Then it will give me that result