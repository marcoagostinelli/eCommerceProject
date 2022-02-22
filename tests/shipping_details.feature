Feature: shipping_details
  In order to see the shipping details
  As a client
  I need to go through the proccess of checkout

  Scenario: try shipping_details
    Given I have finished my checkout fir my order
    When I click "Next"
    Then it will show me the total cost with shipping details