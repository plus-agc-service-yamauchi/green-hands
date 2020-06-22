<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ccc4278666d7f4ee795f04f59e3d098
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'd8fc6259a0eeffb20584d5ae433da454' => __DIR__ . '/..' . '/tackk/cartographer/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tackk\\Cartographer\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Pepabo\\OAuth2\\Client\\' => 21,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
            'League\\Flysystem\\' => 17,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Pagination\\' => 22,
            'Illuminate\\Contracts\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tackk\\Cartographer\\' => 
        array (
            0 => __DIR__ . '/..' . '/tackk/cartographer/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Pepabo\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/pepabo/oauth2-colormeshop/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Pagination\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/pagination',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ColorMeShop\\Admin' => __DIR__ . '/../..' . '/src/class-admin.php',
        'ColorMeShop\\Api\\Product_Api' => __DIR__ . '/../..' . '/src/api/class-product-api.php',
        'ColorMeShop\\Models\\Setting' => __DIR__ . '/../..' . '/src/models/class-setting.php',
        'ColorMeShop\\Models\\Sitemap' => __DIR__ . '/../..' . '/src/models/class-sitemap.php',
        'ColorMeShop\\Paginator' => __DIR__ . '/../..' . '/src/class-paginator.php',
        'ColorMeShop\\Paginator_Factory' => __DIR__ . '/../..' . '/src/class-paginator-factory.php',
        'ColorMeShop\\Plugin' => __DIR__ . '/../..' . '/src/class-plugin.php',
        'ColorMeShop\\Shortcode_Interface' => __DIR__ . '/../..' . '/src/shortcode-interface.php',
        'ColorMeShop\\Shortcode_Invoker' => __DIR__ . '/../..' . '/src/class-shortcode-invoker.php',
        'ColorMeShop\\Shortcodes\\Cart\\Button' => __DIR__ . '/../..' . '/src/shortcodes/cart/class-button.php',
        'ColorMeShop\\Shortcodes\\Product' => __DIR__ . '/../..' . '/src/shortcodes/class-product.php',
        'ColorMeShop\\Shortcodes\\Product\\Image' => __DIR__ . '/../..' . '/src/shortcodes/product/class-image.php',
        'ColorMeShop\\Shortcodes\\Product\\Option' => __DIR__ . '/../..' . '/src/shortcodes/product/class-option.php',
        'ColorMeShop\\Shortcodes\\Product\\Page' => __DIR__ . '/../..' . '/src/shortcodes/product/class-page.php',
        'ColorMeShop\\Swagger\\ApiException' => __DIR__ . '/../..' . '/src/Swagger/ApiException.php',
        'ColorMeShop\\Swagger\\Api\\CategoryApi' => __DIR__ . '/../..' . '/src/Swagger/Api/CategoryApi.php',
        'ColorMeShop\\Swagger\\Api\\ChargeApi' => __DIR__ . '/../..' . '/src/Swagger/Api/ChargeApi.php',
        'ColorMeShop\\Swagger\\Api\\CustomerApi' => __DIR__ . '/../..' . '/src/Swagger/Api/CustomerApi.php',
        'ColorMeShop\\Swagger\\Api\\DeliveryApi' => __DIR__ . '/../..' . '/src/Swagger/Api/DeliveryApi.php',
        'ColorMeShop\\Swagger\\Api\\EtcApi' => __DIR__ . '/../..' . '/src/Swagger/Api/EtcApi.php',
        'ColorMeShop\\Swagger\\Api\\GiftApi' => __DIR__ . '/../..' . '/src/Swagger/Api/GiftApi.php',
        'ColorMeShop\\Swagger\\Api\\GroupApi' => __DIR__ . '/../..' . '/src/Swagger/Api/GroupApi.php',
        'ColorMeShop\\Swagger\\Api\\PaymentApi' => __DIR__ . '/../..' . '/src/Swagger/Api/PaymentApi.php',
        'ColorMeShop\\Swagger\\Api\\ProductApi' => __DIR__ . '/../..' . '/src/Swagger/Api/ProductApi.php',
        'ColorMeShop\\Swagger\\Api\\SaleApi' => __DIR__ . '/../..' . '/src/Swagger/Api/SaleApi.php',
        'ColorMeShop\\Swagger\\Api\\ScriptApi' => __DIR__ . '/../..' . '/src/Swagger/Api/ScriptApi.php',
        'ColorMeShop\\Swagger\\Api\\ShopApi' => __DIR__ . '/../..' . '/src/Swagger/Api/ShopApi.php',
        'ColorMeShop\\Swagger\\Api\\StockApi' => __DIR__ . '/../..' . '/src/Swagger/Api/StockApi.php',
        'ColorMeShop\\Swagger\\Configuration' => __DIR__ . '/../..' . '/src/Swagger/Configuration.php',
        'ColorMeShop\\Swagger\\HeaderSelector' => __DIR__ . '/../..' . '/src/Swagger/HeaderSelector.php',
        'ColorMeShop\\Swagger\\Model\\ApplicationCharge' => __DIR__ . '/../..' . '/src/Swagger/Model/ApplicationCharge.php',
        'ColorMeShop\\Swagger\\Model\\ApplicationChargeCreateResponse' => __DIR__ . '/../..' . '/src/Swagger/Model/ApplicationChargeCreateResponse.php',
        'ColorMeShop\\Swagger\\Model\\Body' => __DIR__ . '/../..' . '/src/Swagger/Model/Body.php',
        'ColorMeShop\\Swagger\\Model\\Customer' => __DIR__ . '/../..' . '/src/Swagger/Model/Customer.php',
        'ColorMeShop\\Swagger\\Model\\Delivery' => __DIR__ . '/../..' . '/src/Swagger/Model/Delivery.php',
        'ColorMeShop\\Swagger\\Model\\DeliveryCharge' => __DIR__ . '/../..' . '/src/Swagger/Model/DeliveryCharge.php',
        'ColorMeShop\\Swagger\\Model\\DeliveryChargeByPrefecture' => __DIR__ . '/../..' . '/src/Swagger/Model/DeliveryChargeByPrefecture.php',
        'ColorMeShop\\Swagger\\Model\\DeliveryDateSetting' => __DIR__ . '/../..' . '/src/Swagger/Model/DeliveryDateSetting.php',
        'ColorMeShop\\Swagger\\Model\\DeliveryDateSettingDays' => __DIR__ . '/../..' . '/src/Swagger/Model/DeliveryDateSettingDays.php',
        'ColorMeShop\\Swagger\\Model\\DeliveryDateSettingTimes' => __DIR__ . '/../..' . '/src/Swagger/Model/DeliveryDateSettingTimes.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse200' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse200.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2001' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2001.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20010' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20010.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20011' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20011.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20012' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20012.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20013' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20013.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20014' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20014.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015Gift' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015Gift.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftCard' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftCard.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftCardTypes' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftCardTypes.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftNoshi' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftNoshi.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftNoshiTypes' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftNoshiTypes.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftWrapping' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftWrapping.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20015GiftWrappingTypes' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20015GiftWrappingTypes.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20016' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20016.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20017' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20017.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20018' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20018.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20018Meta' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20018Meta.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20019' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20019.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2002' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2002.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20020' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20020.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20020Meta' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20020Meta.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse20021' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse20021.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2002SalesStat' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2002SalesStat.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2003' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2003.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2004' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2004.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2005' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2005.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2006' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2006.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2007' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2007.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2008' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2008.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2009' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2009.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse201' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse201.php',
        'ColorMeShop\\Swagger\\Model\\InlineResponse2011' => __DIR__ . '/../..' . '/src/Swagger/Model/InlineResponse2011.php',
        'ColorMeShop\\Swagger\\Model\\Mail' => __DIR__ . '/../..' . '/src/Swagger/Model/Mail.php',
        'ColorMeShop\\Swagger\\Model\\Meta' => __DIR__ . '/../..' . '/src/Swagger/Model/Meta.php',
        'ColorMeShop\\Swagger\\Model\\ModelInterface' => __DIR__ . '/../..' . '/src/Swagger/Model/ModelInterface.php',
        'ColorMeShop\\Swagger\\Model\\Payment' => __DIR__ . '/../..' . '/src/Swagger/Model/Payment.php',
        'ColorMeShop\\Swagger\\Model\\PaymentCard' => __DIR__ . '/../..' . '/src/Swagger/Model/PaymentCard.php',
        'ColorMeShop\\Swagger\\Model\\PaymentCardBrands' => __DIR__ . '/../..' . '/src/Swagger/Model/PaymentCardBrands.php',
        'ColorMeShop\\Swagger\\Model\\PaymentCod' => __DIR__ . '/../..' . '/src/Swagger/Model/PaymentCod.php',
        'ColorMeShop\\Swagger\\Model\\PaymentFinancial' => __DIR__ . '/../..' . '/src/Swagger/Model/PaymentFinancial.php',
        'ColorMeShop\\Swagger\\Model\\Product' => __DIR__ . '/../..' . '/src/Swagger/Model/Product.php',
        'ColorMeShop\\Swagger\\Model\\ProductCategory' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductCategory.php',
        'ColorMeShop\\Swagger\\Model\\ProductGroup' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductGroup.php',
        'ColorMeShop\\Swagger\\Model\\ProductOption' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductOption.php',
        'ColorMeShop\\Swagger\\Model\\ProductPickup' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductPickup.php',
        'ColorMeShop\\Swagger\\Model\\ProductPickups' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductPickups.php',
        'ColorMeShop\\Swagger\\Model\\ProductUpdateRequest' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductUpdateRequest.php',
        'ColorMeShop\\Swagger\\Model\\ProductUpdateRequestProduct' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductUpdateRequestProduct.php',
        'ColorMeShop\\Swagger\\Model\\ProductUpdateRequestProductVariants' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductUpdateRequestProductVariants.php',
        'ColorMeShop\\Swagger\\Model\\ProductVariant' => __DIR__ . '/../..' . '/src/Swagger/Model/ProductVariant.php',
        'ColorMeShop\\Swagger\\Model\\RecurringApplicationCharge' => __DIR__ . '/../..' . '/src/Swagger/Model/RecurringApplicationCharge.php',
        'ColorMeShop\\Swagger\\Model\\RecurringApplicationChargeCreateResponse' => __DIR__ . '/../..' . '/src/Swagger/Model/RecurringApplicationChargeCreateResponse.php',
        'ColorMeShop\\Swagger\\Model\\Restock' => __DIR__ . '/../..' . '/src/Swagger/Model/Restock.php',
        'ColorMeShop\\Swagger\\Model\\Sale' => __DIR__ . '/../..' . '/src/Swagger/Model/Sale.php',
        'ColorMeShop\\Swagger\\Model\\SaleDelivery' => __DIR__ . '/../..' . '/src/Swagger/Model/SaleDelivery.php',
        'ColorMeShop\\Swagger\\Model\\SaleDetail' => __DIR__ . '/../..' . '/src/Swagger/Model/SaleDetail.php',
        'ColorMeShop\\Swagger\\Model\\ScriptTag' => __DIR__ . '/../..' . '/src/Swagger/Model/ScriptTag.php',
        'ColorMeShop\\Swagger\\Model\\ScriptTag1' => __DIR__ . '/../..' . '/src/Swagger/Model/ScriptTag1.php',
        'ColorMeShop\\Swagger\\Model\\Shop' => __DIR__ . '/../..' . '/src/Swagger/Model/Shop.php',
        'ColorMeShop\\Swagger\\Model\\Stock' => __DIR__ . '/../..' . '/src/Swagger/Model/Stock.php',
        'ColorMeShop\\Swagger\\Model\\StockCategory' => __DIR__ . '/../..' . '/src/Swagger/Model/StockCategory.php',
        'ColorMeShop\\Swagger\\Model\\StockImages' => __DIR__ . '/../..' . '/src/Swagger/Model/StockImages.php',
        'ColorMeShop\\Swagger\\Model\\V1applicationChargesJsonApplicationCharge' => __DIR__ . '/../..' . '/src/Swagger/Model/V1applicationChargesJsonApplicationCharge.php',
        'ColorMeShop\\Swagger\\Model\\V1recurringApplicationChargesJsonRecurringApplicationCharge' => __DIR__ . '/../..' . '/src/Swagger/Model/V1recurringApplicationChargesJsonRecurringApplicationCharge.php',
        'ColorMeShop\\Swagger\\Model\\V1salessaleIdJsonSale' => __DIR__ . '/../..' . '/src/Swagger/Model/V1salessaleIdJsonSale.php',
        'ColorMeShop\\Swagger\\Model\\V1salessaleIdmailsJsonMail' => __DIR__ . '/../..' . '/src/Swagger/Model/V1salessaleIdmailsJsonMail.php',
        'ColorMeShop\\Swagger\\Model\\V1scriptTagsJsonScriptTag' => __DIR__ . '/../..' . '/src/Swagger/Model/V1scriptTagsJsonScriptTag.php',
        'ColorMeShop\\Swagger\\ObjectSerializer' => __DIR__ . '/../..' . '/src/Swagger/ObjectSerializer.php',
        'ColorMeShop\\Url_Builder' => __DIR__ . '/../..' . '/src/class-url-builder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ccc4278666d7f4ee795f04f59e3d098::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ccc4278666d7f4ee795f04f59e3d098::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9ccc4278666d7f4ee795f04f59e3d098::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9ccc4278666d7f4ee795f04f59e3d098::$classMap;

        }, null, ClassLoader::class);
    }
}
