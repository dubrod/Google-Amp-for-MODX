# Google Amp for MODX
5 Step Guide to adding [Google Amp](https://www.ampproject.org) Markup to your MODX powered website

#Step 1 - Add a new Template

 - You can use `icon-bolt` for a hand visual reference.
 - It's a 1 Template to rule them all Scenario with the Snippet handling placeholders
 - This the basic markup from Google - `https://www.ampproject.org/docs/get_started/create/basic_markup.html`
 - I will make individual files in this Repo for the Template so you can start at basic and move up.

---

#Step 2 - Create an "Amp" Resource

 - Hopefully you can use `amp` as the alias otherwise make note of what your using, you'll need it later
 - Assign the Amp Template
 - Publish
 - Hide from Menu
 - No cache
 - No Search
 
---

#Step 3 - Create a new Snippet "GoogleAmp"

 - I will make individual files in this Repo for the Snippet so you can start at basic and move up.

---

#Step 4 - Link it

 - Add this `<link>` to the Template(s) you want to have AMP mirrors of.
 - NOTE: "amp" after the site_url below. Thats the alias of your Amp Resource from Step 2
 
```<link rel="amphtml" href="[[++site_url]]amp&page=[[*alias]]">```

---

#Step 5 - Validate

  - Visit one of your Articles
  - View Source get the URL from the `amphtml` link
  - Visit that page
  - Open Developer Tools Console in Chrome
  - Add `#development=1` to the end of the URL and refresh
  - You should see `AMP validation successful.` in the console.
  - Then run it in [Google Rich Snippets Testing Tool](https://search.google.com/structured-data/testing-tool)
