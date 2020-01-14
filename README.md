# unms-barcode-generator
Plugin which is used to include barcodes to UNMS .twig templates.

Produced barcode is shown as jpeg image.

You can use it in .twig template (for example Invoice) like this (change YOUR_DOMAIN to your domain name):

```html
<img src="https://[YOUR_DOMAIN]/crm/_plugins/unms-barcode-generator/public.php?barcode=my_barcode_123" />
```
