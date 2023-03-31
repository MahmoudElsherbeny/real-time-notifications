<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute يجب أن يكون مقبول.',
    'active_url' => ':attribute رابط غير صحيح.',
    'after' => ':attribute يجب أن يكون تاريخ مجاوز ل :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخ مجاوز أو مساوى ل :date.',
    'alpha' => ':attribute يمكن أن يحتوى على حروف.',
    'alpha_dash' => ':attribute يمكن أن يحتوى على حروف و أرقام و فواصل.',
    'alpha_num' => ':attribute من الممكن أن يحتوى على حروف و أرقام.',
    'array' => ':attribute يجب أن يكون من نوع مصفوفة.',
    'before' => ':attribute يجب أن يكون تاريخ قبل :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخ قبل أو مساوى ل :date.',
    'between' => [
        'numeric' => ':attribute يجب أن يكون مداه بين :min و :max.',
        'file' => ':attribute يجب أن يكون مداه بين :min و :max كيلوبايت.',
        'string' => ':attribute يجب أن يكون مداه بين :min و :max حروف.',
        'array' => ':attribute يجب أن يحتوى على عناصر بين :min و :max.',
    ],
    'boolean' => ':attribute يجب أن يكون true أو false.',
    'confirmed' => ':attribute غير متطابق.',
    'date' => ':attribute تاريخ غير صحيح.',
    'date_equals' => ':attribute يجب أن يكون تاريخ مساوى ل :date.',
    'date_format' => ':attribute يجب أن لا يطابق :format.',
    'different' => ':attribute و :other يجب أن يكونا مختلفين.',
    'digits' => ':attribute يجب أن يكون :digits خانة.',
    'digits_between' => ':attribute يجب أن يكون مداه بين :min و :max خانة.',
    'dimensions' => ':attribute أبعاد الصورة غير مناسبة.',
    'distinct' => ':attribute يحتوى على قيمة مكررة.',
    'email' => ':attribute يجب أن يكون بريد إلكترونى صحيح.',
    'ends_with' => ':attribute يجب أن ينتهى بأحد هذه القيم: :values.',
    'exists' => ':attribute المختار غير مناسب.',
    'file' => ':attribute يجب أن يكون ملف.',
    'filled' => ':attribute يجب أن يحتوى على قيمة.',
    'gt' => [
        'numeric' => ':attribute يجب أن يكون أكبر من :value.',
        'file' => ':attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'string' => ':attribute يجب أن يكون أكبر من :value حروف.',
        'array' => ':attribute يجب أن يحتوى أكثر من :value عناصر.',
    ],
    'gte' => [
        'numeric' => ':attribute يجب أن يكون أكبر من أو يساوى :value.',
        'file' => ':attribute يجب أن يكون أكبر من أو يساوى :value كيلوبايت.',
        'string' => ':attribute يجب أن يكون أكبر من أو يساوى :value حروف.',
        'array' => ':attribute يجب أن يحتوى :value عناصر على الأقل.',
    ],
    'image' => ':attribute يجب أن يكون صورة.',
    'in' => ':attribute المختار غير صالح.',
    'in_array' => ':attribute غير متواجد فى :other.',
    'integer' => ':attribute يجب أن يكون رقم صحيح.',
    'ip' => ':attribute يجب أن يكون IP address صالح.',
    'ipv4' => ':attribute يجب أن يكون IPv4 address صالح.',
    'ipv6' => ':attribute يجب أن يكون IPv6 address صالح.',
    'json' => ':attribute يجب أن يكون من نوع JSON.',
    'lt' => [
        'numeric' => ':attribute يجب أن يكون أقل من :value.',
        'file' => ':attribute يجب أن يكون أقل من :value كيلوبايت.',
        'string' => ':attribute يجب أن يكون أقل من :value حروف.',
        'array' => ':attribute يجب أن يحتوى أقل من :value عناصر.',
    ],
    'lte' => [
        'numeric' => ':attribute يجب أن يكون أقل من أو يساوى :value.',
        'file' => ':attribute يجب أن يكون أقل من أو يساوى :value كيلوبايت.',
        'string' => ':attribute يجب أن يكون أقل من أو يساوى :value حروف.',
        'array' => ':attribute لا يجب أن يحتوى أكثر من :value عناصر.',
    ],
    'max' => [
        'numeric' => ':attribute لا يجب أن يتجاوز :max.',
        'file' => ':attribute لا يجب أن يتجاوز :max كيلوبايت.',
        'string' => ':attribute لا يجب أن يتجاوز :max حروف.',
        'array' => ':attribute لا يجب أن يحتوى أكثر من :max عناصر.',
    ],
    'mimes' => ':attribute يجب أن يكون ملف من نوع: :values.',
    'mimetypes' => ':attribute يجب أن يكون ملف من نوع: :values.',
    'min' => [
        'numeric' => ':attribute يجب أن يحتوى على الأقل :min.',
        'file' => ':attribute يجب أن يحتوى على الأقل :min كيلوبايت.',
        'string' => ':attribute يجب أن يحتوى على الأقل :min حروف.',
        'array' => ':attribute يجب أن يحتوى على الأقل :min عناصر.',
    ],
    'not_in' => ':attribute المختار غير صحيح.',
    'not_regex' => ':attribute صيغته غير مناسبة.',
    'numeric' => ':attribute يجب أن يكون رقم.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => ':attribute يجب أن يكون مسجل.',
    'regex' => ':attribute صيغته غير مناسبة.',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب.',
    'required_unless' => ':attribute مطلوب عندما. لا يكون :other بين هذه القيم :values.',
    'required_with' => ':attribute مطلوب عندما تكون هذه القيم :values مسجلة.',
    'required_with_all' => ':attribute مطلوب عندما تكون هذه القيم :values مسجلة.',
    'required_without' => ':attribute مطلوب عندما تكون هذه القيم :values غير مسجلة.',
    'required_without_all' => ':attribute مطلوب عندما لا تكون هذه القيم :values مسجلة.',
    'same' => ':attribute و :other غير متطابقين.',
    'size' => [
        'numeric' => ':attribute يجب أن يكون :size.',
        'file' => ':attribute يجب أن يكون :size كيلو بايت.',
        'string' => ':attribute يجب أن يكون :size حروف.',
        'array' => ':attribute يجب أن يحتوى على :size عناصر.',
    ],
    'starts_with' => ':attribute يجب أن يبدأ بأحد هذه القيم: :values.',
    'string' => ':attribute يجب أن يكون نص',
    'timezone' => ':attribute غير صحيح',
    'unique' => ':attribute مسجل من قبل',
    'uploaded' => ':attribute لم يتم رفع ',
    'url' => ':attribute غير صالح.',
    'uuid' => ':attribute غير صالح.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'platform_commission_type' => 'نوع عمولة المنصة',
        'affilater_commission_type' => 'نوع عمولة المسوق',
        'platform_commission_value' => 'قيمة عمولة المنصة',
        'affilater_commission_value' => 'قيمة عمولة المسوق',
        'first_name' => 'الإسم الأول',
        'last_name' => 'الإسم الآخير',
        'email' => 'البريد الإلكترونى',
        'phone' => 'رقم الهاتف',
        'address' => 'العنوان',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'shop_name' => 'إسم المتجر',
        'shop_address' => 'عنوان المتجر',
        'shop_type' => 'مجال عمل المتجر',
        'affilate_name' => 'إسم منصة التسويق',
        'affilate_link' => 'رابط منصة التسويق',
        'affilate_area' => 'نطاق العمل',
        'affilate_type' => 'المنتجات التى تعمل بها',
        'name' => 'الإسم',
        'category' => 'القسم',
        'price' => 'السعر',
        'min_sell' => 'أقل كمية بيع',
        'status' => 'الحالة',
        'discreption' => 'الوصف',
        'image' => 'الصورة',
        'images' => 'الصور',
        'prod_attributes' => 'المواصفات',
        'prod_attributes.*.type' => 'نوع المواصفة',
        'prod_attributes.*.value' => 'قيمة المواصفة',
        'prod_attributes.*.new_price' => 'فرق سعر المواصفة',
        'color' => 'اللون',
        'color_ar' => 'اللون',
        'color_en' => 'اللون',
        'size' => 'المقاس',
        'size_ar' => 'المقاس',
        'size_en' => 'المقاس',
        'quantity' => 'الكمية',
        'quantities' => 'الكميات',
        'quantities.*.qty' => 'كمية كل مواصفة',
        'delivery' => 'سعر الشحن',
        'amount' => 'المبلغ',
        'account_num' => 'رقم الحساب',
    ],

];
