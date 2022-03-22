Feature: display_categories
  In order to display a category of products
  As a Seller
  I need to make my new category avalable for everyone to see

  Scenario: try display_categories
    Given I have a new category I want to add
    When I go to "add category" as a seller
    And input all the details about the new category
    Then the category should be avalable for all clients to see