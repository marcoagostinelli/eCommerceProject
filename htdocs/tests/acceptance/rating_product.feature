Feature: rating_product
  In order to leave a rating 
  As a client
  I need to buy the product before leaving a rating

  Scenario: try rating_product
    Given I have bought a product
    When I select the same product again
    Then I should be able to leave a rating