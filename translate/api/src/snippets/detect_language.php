<?php

/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// [START translate_detect_language]
use Google\Cloud\Translate\TranslateClient;

// $apiKey = 'YOUR-API-KEY';
// $text = 'The text whose language to detect.  This will be detected as en.';

$translate = new TranslateClient([
    'key' => $apiKey,
]);
$result = $translate->detectLanguage($text);
print("Language code: $result[languageCode]\n");
print("Confidence: $result[confidence]\n");
// [END translate_detect_language]
