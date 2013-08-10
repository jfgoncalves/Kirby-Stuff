# Featured Page

This snippet will fetch the page you give him with findbyUID() and retrieve image/text.

# Be sure to

- Set a page in findbyUID()
- Have an image with a text field 'featured' set to yes in the featured page directory. To do so,
    * If you have the Panel installed, in your blueprint, make sure to add this code at the end : 

```
filefields:
  featured:
    label: Set featured (Write 'yes' to link this image in the featured snippet)
    type: text
```
    * if you don't have the panel, create a yourfeaturedimage.extension.txt file in the same directory as yourfeaturedimage.extension and make sure you've added this line to it :

```
Featured: yes
```