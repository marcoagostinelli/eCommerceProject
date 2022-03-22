Feature: remove_from_wishlist
  In order to remove products from wishlist
  As a client
  I need to select my wishlist and click "remove"

  Scenario: try remove_from_wishlist
    Given I have products in my wishlist
    When I select my wishlist
    And it shows me all of my items
    Then I should see an option called "remove", which removes a wishlist item