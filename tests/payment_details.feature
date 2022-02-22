Feature: payment_details
  In order to input the payment details
  As a client
  I need to proceed through the checkout

  Scenario: try payment_details
    Given I'm pleased with my order
    When I proceed through the checkout
    Then I should be able to enter my payment details