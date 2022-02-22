Feature: add_profile_pic
  In order to change my profile picture
  As a client
  I need to choose an image I have and set it as my profile picture

  Scenario: try add_profile_pic
    Given I have an image on my computer
    When I select "change profile picture"
    And I select the file where my image is located
    Then I should see the profile picture of my account change
