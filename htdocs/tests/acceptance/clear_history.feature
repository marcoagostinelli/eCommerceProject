Feature: clear_history
  In order to clear browsing history on the website
  As a client
  I need to click "settings"

  Scenario: try clear_history
    Given I have searched multiple products on the website
    When I select "clear browsing history" from settings
    Then I all of my searches should be cleared