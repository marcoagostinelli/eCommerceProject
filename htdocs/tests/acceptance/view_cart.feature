Feature: view_cart
  In order to view the products in my cart
  As a client
  I need to access the view cart page

  Scenario: try view_cart
    Given the website where I can browse from
    When I go select "my cart"
    Then the list of items in my cart should display on the screen