Feature: leave_review
  In order to Leave a product review
  As a client
  I need to type my review for a product

  Scenario: try leave_review
    Given the product I want to review
    When I click on the product while signed in
    Then I should be given the option to leave a review
    And this review will be public for everyone to see