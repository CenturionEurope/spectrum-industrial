<!-- Product Schema -->
<script type="text/javascript">
console.log("this is a {{ $Api->Product->ProductName }} product page in {{$Api->Product->CategoryInfo->name or ''}} category");
</script>
<script type="application/ld+json">    
    {
        "@context": "http://schema.org/", 
        "@type": "Product", 
        "name": "{{ $Api->Product->ProductName }}",
        "image": "{{Voyager::image($Api->Product->FeatureImage)}}",
        "description": "qwdqqwdq",
        "brand": "Spectrum",
        "sku": "{{$Api->Product->ProductCode}}"
    }
</script>