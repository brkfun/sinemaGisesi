<?php

return array (
  'uploaded' => ' :attribute yüklenemedi.',
  'url' => ' :attribute biçimi geçersiz.',
  'uuid' => ' :attribute, geçerli bir UUID olmalıdır.',
  'custom' => 
  array (
    'attribute-name' => 
    array (
      'rule-name' => 'özel mesaj',
    ),
  ),
  'gt' => 
  array (
    'numeric' => ' :attribute, :value\'den büyük olmalıdır.',
    'file' => ' :attribute, :value kilobayttan büyük olmalıdır.',
    'string' => ' :attribute, :value karakterden büyük olmalıdır.',
    'array' => ' :attribute, :value\'den fazla öğeye sahip olmalıdır.',
  ),
  'gte' => 
  array (
    'file' => ' :attribute, :value kilobayttan büyük veya ona eşit olmalıdır.',
    'numeric' => ' :attribute, :value\'den büyük veya ona eşit olmalıdır.',
    'string' => ' :attribute, :value karakterden büyük veya ona eşit olmalıdır.',
    'array' => ' :attribute, :value veya daha fazla öğeye sahip olmalıdır.',
  ),
  'required_unless' => ' :other, :values\'te olmadığı sürece :attribute alanı gereklidir.',
  'lt' => 
  array (
    'string' => ' :attribute, :value karakterden az olmalıdır.',
    'numeric' => ' :attribute, :value\'den küçük olmalıdır.',
    'file' => ' :attribute, :value kilobayttan küçük olmalıdır.',
    'array' => ' :attribute, :value\'den az öğeye sahip olmalıdır.',
  ),
  'ends_with' => ' :attribute aşağıdakilerden biriyle bitmelidir: :values.',
  'confirmed' => ' :attribute onayı eşleşmiyor.',
  'date' => ' :attribute geçerli bir tarih değil.',
  'date_equals' => ' :attribute, :date\'ye eşit bir tarih olmalıdır.',
  'date_format' => ' :attribute, :format biçimiyle eşleşmiyor.',
  'different' => ' :attribute ve :other farklı olmalıdır.',
  'digits' => ' :attribute :digits basamaklı olmalıdır.',
  'digits_between' => ' :attribute, :min ile :max basamak arasında olmalıdır.',
  'dimensions' => ' :attribute geçersiz resim boyutlarına sahip.',
  'distinct' => ' :attribute alanı yinelenen bir değere sahiptir.',
  'email' => ' :attribute, geçerli bir e-posta adresi olmalıdır.',
  'exists' => 'Seçilen :attribute geçersiz.',
  'file' => ' :attribute bir dosya olmalıdır.',
  'filled' => ' :attribute alanı bir değere sahip olmalıdır.',
  'image' => ' :attribute bir resim olmalıdır.',
  'in' => 'Seçilen :attribute geçersiz.',
  'in_array' => ' :attribute alanı :other\'de mevcut değil.',
  'integer' => ' :attribute bir tam sayı olmalıdır.',
  'ip' => ' :attribute, geçerli bir IP adresi olmalıdır.',
  'ipv4' => ' :attribute, geçerli bir IPv4 adresi olmalıdır.',
  'ipv6' => ' :attribute, geçerli bir IPv6 adresi olmalıdır.',
  'json' => ' :attribute, geçerli bir JSON dizesi olmalıdır.',
  'accepted' => ' :attribute kabul edilmelidir.',
  'active_url' => ' :attribute geçerli bir URL değil.',
  'after' => ' :attribute, :date\'den sonraki bir tarih olmalıdır.',
  'after_or_equal' => ' :attribute, :date\'den sonraki veya ona eşit bir tarih olmalıdır.',
  'alpha' => ' :attribute yalnızca harf içerebilir.',
  'alpha_dash' => ' :attribute yalnızca harf, rakam, kısa çizgi ve alt çizgi içerebilir.',
  'alpha_num' => ' :attribute yalnızca harf ve rakamlardan oluşabilir.',
  'array' => ' :attribute bir dizi olmalıdır.',
  'before' => ' :attribute, :date\'den önceki bir tarih olmalıdır.',
  'before_or_equal' => ' :attribute, :date\'den önceki veya ona eşit bir tarih olmalıdır.',
  'between' => 
  array (
    'numeric' => ' :attribute, :min ile :max arasında olmalıdır.',
    'file' => ' :attribute, :min ile :max kilobayt arasında olmalıdır.',
    'string' => ' :attribute, :min ile :max karakter arasında olmalıdır.',
    'array' => ' :attribute, :min ile :max arasında öğe içermelidir.',
  ),
  'boolean' => ' :attribute alanı doğru veya yanlış olmalıdır.',
  'lte' => 
  array (
    'numeric' => ' :attribute, :value\'den küçük veya ona eşit olmalıdır.',
    'file' => ' :attribute, :value kilobayttan küçük veya ona eşit olmalıdır.',
    'string' => ' :attribute, :value karakterden küçük veya ona eşit olmalıdır.',
    'array' => ' :attribute, :value\'den fazla öğe içermemelidir.',
  ),
  'max' => 
  array (
    'numeric' => ' :attribute, :max\'den büyük olamaz.',
    'file' => ' :attribute, :max kilobayttan büyük olamaz.',
    'string' => ' :attribute, :max karakterden büyük olamaz.',
    'array' => ' :attribute, :max\'den fazla öğeye sahip olamaz.',
  ),
  'mimes' => ' :attribute şu tipte bir dosya olmalıdır: :values.',
  'mimetypes' => ' :attribute şu tipte bir dosya olmalıdır: :values.',
  'min' => 
  array (
    'numeric' => ' :attribute en az :min olmalıdır.',
    'file' => ' :attribute en az :min kilobayt olmalıdır.',
    'string' => ' :attribute en az :min karakter olmalıdır.',
    'array' => ' :attribute en az :min öğeye sahip olmalıdır.',
  ),
  'not_in' => 'Seçilen :attribute geçersiz.',
  'not_regex' => ' :attribute biçimi geçersiz.',
  'numeric' => ' :attribute bir sayı olmalıdır.',
  'password' => 'Şifre yanlış.',
  'present' => ' :attribute alanı mevcut olmalıdır.',
  'regex' => ' :attribute biçimi geçersiz.',
  'required' => ' :attribute alanı zorunludur.',
  'required_if' => ' :other, :value olduğunda :attribute alanı gereklidir.',
  'required_with' => ' :values mevcut olduğunda :attribute alanı gereklidir.',
  'required_with_all' => ' :values mevcut olduğunda :attribute alanı gereklidir.',
  'required_without' => ' :values mevcut olmadığında :attribute alanı gereklidir.',
  'required_without_all' => ' :values alanından hiçbiri olmadığında :attribute alanı gereklidir.',
  'same' => ' :attribute ve :other eşleşmelidir.',
  'size' => 
  array (
    'numeric' => ' :attribute, :size olmalıdır.',
    'file' => ' :attribute, :size kilobayt olmalıdır.',
    'string' => ' :attribute, :size karakter olmalıdır.',
    'array' => ' :attribute, :size öğe içermelidir.',
  ),
  'starts_with' => ' :attribute aşağıdakilerden biriyle başlamalıdır: :values.',
  'string' => ' :attribute bir dizge olmalıdır.',
  'timezone' => ' :attribute geçerli bir bölge olmalıdır.',
  'unique' => ' :attribute zaten alınmış.',
);
