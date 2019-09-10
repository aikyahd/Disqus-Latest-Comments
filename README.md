# Disqus-Latest-Comments
Get the latest Disqus comment from your website.

Follow the steps,

  1. Go to Disqus admin panel, "https://disqus.com/admin/",
  
  2. Select your desired site from the top dropdown,
  
  3. At this point notice the URL in the browser, something like this "https://YOUR-WEBSITE-SHORTNAME.disqus.com/admin/", for example, the part "YOUR-WEBSITE-SHORTNAME" might be "example-com", something like that.
  
  4. Now, use the php code provided with the following link, "https://example-com.disqus.com/latest.rss".



NOTE: We have used PHP cURL method and converted the response text to an object using "simplexml_load_string" function. The code provide will only work if your XML file will have the following structure. For different structure, get creative and figure out how to use the code at your advantage.

