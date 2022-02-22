Feature: view_history
  In order to view browsing history on the website
  As a client
  I need to click "settings"

  Scenario: try add_profile_pic
    Given I have searched multiple products on the website
    When I select "view browsing history" from settings
    Then I should see all of my searches