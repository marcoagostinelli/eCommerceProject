Feature: add_to_wishlist
  In order to add a product to my wishlist
  As a client
  I need to select a product and add it to my wishlist

  Scenario: try add_to_wishlist
    Given I have a product that I'm interested in
    When I'm browsing through the avalable products
    And I click "add to wishlist" on the desired product
    Then the product should show be displayed in my wishlist