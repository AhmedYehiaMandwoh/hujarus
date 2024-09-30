<?php

use Illuminate\Support\Facades\Lang;

return [
 
    'image_max' => 'يجب تكون الصورة أقل من 2 ميجابيت',
    'image_type' => 'يجب أن يكون الحقل من أنواع الصور ',
    'image_dimensions' => 'أبعاد الصورة يجب أن تكون طول 250 و عرض 500 كحد أدنى و طول 1000 و عرض 1000 كحد أقصى',
    'invalid_image_upload' => 'الصور غير صحيحة',
    'email_not_unique' => 'قيمة البريد الإلكتورني مستخدمة من قبل',
    'money' => 'القيمة غير صحيحة',
    'longitude' => 'القيمة غير صحيحة',
    'latitude' => 'القيمة غير صحيحة',
    'email_or_phone' => 'البريد الإلكتروني او رقم الجوال غير صحيح',
    'name' => 'الاسم مطلوب',

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون :attribute ًمصفوفة.',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'national_id' => 'يجب أن يكون رقم هوية صحيح البُنية.',
    'phone' => 'يجب أن يكون رقم الجوال صحيح البُنية.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'exists' => 'القيمة المحددة :attribute غير موجودة.',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image' => 'يجب أن يكون :attribute صورةً.',
    'in' => ':attribute غير موجود.',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصًا من نوع JSON.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'multiple_of' => ':attribute يجب أن يكون من مضاعفات :value',
    'not_in' => 'العنصر :attribute غير صحيح.',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب تقديم :attribute.',
    'regex' => 'صيغة :attribute .غير صحيحة.',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'url' => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid' => ':attribute يجب أن يكون بصيغة UUID سليمة.',
    'price' => 'السعر غير صحيح.',
    'qte' => 'الكمية غير صحيحة.',


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'attributes' => [
        'name' => 'الاسم',
        'name.ar' => 'الاسم Ar',
        'name.en' => 'الاسم En',
        'username' => 'اسم المُستخدم',
        'email' => 'البريد الالكتروني',
        'first_name' => 'الاسم الأول',
        'last_name' => 'اسم العائلة',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city' => 'المدينة',
        'country' => 'الدولة',
        'address' => 'العنوان',
        'phone' => 'الهاتف',
        'mobile' => 'الجوال',
        'age' => 'العمر',
        'sex' => 'الجنس',
        'gender' => 'النوع',
        'day' => 'اليوم',
        'month' => 'الشهر',
        'year' => 'السنة',
        'hour' => 'ساعة',
        'minute' => 'دقيقة',
        'second' => 'ثانية',
        'title' => 'العنوان',
        'content' => 'المُحتوى',
        'description' => 'الوصف',
        'excerpt' => 'المُلخص',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'available' => 'مُتاح',
        'size' => 'الحجم',
        'message' => 'الرسالة',
        'price' => 'السعر',
        'space' => 'المساحة',
        'agency_number' => 'رقم الوكالة',
        'agency_name' => 'إسم المفوض',
        'chart_number' => 'رقم المخطط',
        'block_number' => 'رقم البلك',
        'vat_number' => 'رقم الضريبة',
        'type' => 'النوع',
        'land_owner_to_id' => 'المشتري',
        'deed_number' => 'رقم الصق',
        'plan_number' => 'أرقام القطع',
        'land_owner_from_id' => 'البائع',
        'mediator.*.id' => 'السعي',
        'comment' => 'التعليق',
        'attachment' => 'المرفقات',
        'attachments' => 'المرفقات',
        'archive_tree_id' => 'مسار الحفظ (غير صحيح)',
        'expected_count_files' => 'عدد الملفات المتوقعة',
        'move_type' => 'نوع النقل',
        'unit_number' => 'رقم الوحدة',
        'floor' => 'الطابق',
        'room_count' => 'عدد الغرف',
        'doc_unit_number' => 'رقم الشقة في محضر الفرز',
        'doc_number' => 'رقم محضر الفرز',
        'area' => 'المساحة',
        'special_area' => 'مساحة الجزء الخاص',
        'total_area' => 'المساحة الإجمالية',
        'bathroom_count' => 'عدد الحماملات',
        'is_furnished' => 'مفروشه',
        'air_conditioner_count' => 'عدد مكيفات الهواء',
        'sale_type' => 'نوع البيع',
        'price_before_tax' => 'السعر قبل الضريبة',
        'tax_rate' => 'نسبة الضريبة',
        'tax_value' => 'قيمة الضريبة',
        'price_after_tax' => 'السعر بعد الضريبة',
        'duration_contract' => 'مدة العقد',
        'unit_class' => 'فئة الوحدة',
        'rental_type' => 'نوع الإيجار',
        'insurance_value' => 'قيمة التامين',
        'maintenance_and_water_fees' => 'رسو المياه والصيانه',
        'assign_to' => 'موجة لـ ',
        'start_at' => 'تاريخ البدء',
        'end_at' => 'تاريخ الأنتهاء',
        'due_date' => 'تاريخ الأستحقاق',
        'campaign' => [
            '*' => [
                'campaign_type_id' => 'نوع الحملة',
                'budget' => 'الميزانية',
            ],
        ],
        'budget' => 'الميزانية',
        'nationality_id' => 'الجنسية',
        'city_id' => 'المدينة',
        'national_id' => 'رقم الهوية',
        'national_id_end_date' => 'تاريخ انتهاء رقم الهوية',
        'date_of_birth' => 'تاريخ الميلاد',
        'exemption_certificate_number' => 'رقم شهادة الأعفاء',
        'exemption_certificate_file' => 'صورة شهادة الأعفاء',
        'is_tax_free' => 'معفى من الضرائب',
        'client_id' => 'العميل',
        'client.nationality_id' => 'الجنسية',
        'unit' => 'الوحدة',
        'project_id' => 'المشروع',
        'payment_method' => 'طريقة الدفع',
        'tax_free_status' => 'حالة الإعفاء من الضريبة',
        'from_bank_name' => 'إسم البنك المحول منه',
        'from_account_name' => 'إسم صاحب الحساب المحول منه',
        'id_number' => 'رقم الهوية',
        'role' => 'الدور',
        'client.phone' => 'الجوال',
        'client.name' => 'الاسم',
        'payment_terms' => 'شروط الدفع',
        'comprehensive_warranty_period_from' => 'مدة الضمان الشامل من',
        'comprehensive_warranty_period_to' => 'مدة الضمان الشامل إلي',
        'maintenance_cleaning_of_common_area_period_from' => 'مدة الصيانة والنظافة للأماكن المشتركة من',
        'maintenance_cleaning_of_common_area_period_to' => 'مدة الصيانة والنظافة للأماكن المشتركة إلي',
        'is_received_files' => 'هل إستلمت صك الشقة؟',
        'is_received_key' => 'هل إستلمت مفتاح الشقة؟',
        'halls_design' => 'تصميم تصميم الصاله والمجلس',
        'is_has_maid_room' => 'هل تحتوي غرفة خادمة؟',
        'is_has_storage_room' => 'هل توجد غرفة تخزين أو غرفة غسيل؟',
        'is_has_roof' => 'هل يوجد فناء (سطح أو حوش)؟',
        'is_has_rather' => 'هل يوجد بلكونة؟',
        'parking_question' => 'هل يوجد موقف خارجي أو بالقبو؟',
        'is_has_air_conditioning' => 'هل تم تركيب مكيفات؟',
        'is_has_kitchen' => 'هل تم تركيب المطبخ (دواليب)؟',
        'is_kitchen_has_apps' => 'هل تم تركيب أجهزة في المطبخ؟',
        'is_furnished_question' => 'هل تم فرش الشقة؟',
        'parking' => 'الموقف',
        'unit_password' => 'الرقم السري للشقه',
        'code' => 'رمز الشركة',
        'recommendation' => 'التوصية',
        'communication_user_id' => 'مسئول التواصل',
        'users.*' => 'المستخدم',
        'variables.*.id' => 'المتغير',
        'variables.*.value' => 'قيمه المتغير',
        'sample_id' => 'النماذج',
        ...(Lang::get('base'))

    ],
];
