This is a Reverb-based website project.
The aim of the project is to create a website that allows visitors to see my other projects running, without including them in the source code for the site.

For instance, by visiting the Pepmo website, you will be able to check out the TerrainGen project, even though the TerrainGen code is not part of the Pepmo site. I could easily change the document root in Apache to point to the TerrainGen code instead of the Pepmo code, and TerrainGen would function exactly as it does when accessed through Pepmo.

This project has required me to add namespaces to my Reverb-based projects for the first time, so that different projects can include the same framework-specific classes (like SiteConfig and DbWrapper) without clashes occurring.
