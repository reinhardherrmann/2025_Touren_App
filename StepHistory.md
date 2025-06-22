






helper: 0001_01_01_000000










## Step main Bugfix
Sources: none
- change appearance of flash messages on Page
- 
---
## Step 09 Create Component to Edit Address
Sources: none
- create Component
- added functions to change Address or to leave without changes.
- added margin top to pagination on index.blade
- added select to modify addresses per page 
---
## Step 08 Create Component ViewAddress
Sources: none
- create component
- activated button in view index to navigate to addresses.view
---
## Step 07 Make Addresses.index searchable 
Sources: https://livewire.laravel.com/screencast/data-tables/searching
- make Addresses searchable for
  - streets, postal codes, cities or district
- Added Key to every table row
- bring Button Delete to live
- integrated Flash messages in app.blade.php
---
## Step main Bugfixes for Daisy Ui and addresse.index
Sources: none
- added Sechrfield and Button to index.blade
- 
---
## Step 06 Bring Create Address to life
Sources: none
- change flux inputs to daisyui
- add validation
---
## Step 05 Install DaisyUI
Sources: https://daisyui.com/docs/install/laravel/
- install Framework
- 
---
## Step 04 Create Pages for Addresses
Sources: https://www.youtube.com/watch?v=uWU6QOsQM_w&t=382s
- create addresses.blade to show all pages wanted
- create Link in Sidebar and Route
- create Livewire Components:
  - Addresses.index
  - Addresses.Create
  - TODO: make pages work
---
## Step 03 Fill Seeders with data
Sources: none
- 
- created Mode. Migration, Factory and Seeder for TripTypes
---
## Step 02 Create Models, Migrations and Seeders for all tables
Sources: none
- create migrations:
  - remarks, addresses, remarks_users, brands, manufacturers, status, stores, stocks, trucks
  - trips, disruptions, disruption types, disruptions-trips stopps Settings
- Add ForeignIDs to tables:
  - address_id to users table
- Add Models:
  - RemarksUsers, Brand, Manufacturer Status, stores, stocks, trucks
  - Trip, Disruption, DisruptionTypes Disruption_Trips stopps Settings
---
## Step 01 Installation and Debugbar
Sources: none
- Install Laravel debugbar
- Update App-Title
- update Database connection
- Add App - Logos
- updated Welcome.blade with new text and new App-Logo
- updated App-Logo for Login, Register and Sidebar Blade files
---
