<?php

namespace Dietercoopman\Ai;

class Ai
{
    private static function getClient()
    {
        $client = \OpenAI::client('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');

        return $client;
    }

    /**
     * Translate a given text to a given language
     *
     * @return string
     */
    public static function translateTextTo($text, $target_language)
    {
        $client = self::getClient();
        $source_language = config('ai.source_language');

        $result = $client->edits()->create([
            'model' => 'text-davinci-edit-001',
            'input' => $text,
            'instruction' => "Translate from '{$source_language}' to '{$target_language}'",
        ]);

        return $result->choices[0]->text;
    }

    /**
     * Review a given text
     *
     * @return string
     */
    public static function reviewText($text)
    {

        $client = self::getClient();
        $source_language = config('ai.source_language');

        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => "Review my text keeping and return it in the original language {$source_language}: '{$text}'",
            'max_tokens' => 100,
            'n' => 1,
            'temperature' => 0.5,
        ]);

        return $result->choices[0]->text;
    }

    /**
     * Make this text more as it was marketing text
     *
     * @return string
     */
    public static function marketingText($text, $paragraphs = 1)
    {

        $client = self::getClient();
        $source_language = config('ai.source_language');

        $result = $client->edits()->create([
            'model' => 'text-davinci-edit-001',
            'input' => $text,
            'instruction' => "make this text more marketing like and {$paragraphs} paragraphs long",
        ]);

        return $result->choices[0]->text;
    }

    /**
     * Create an image based on a description
     */
    public static function createImage($description, $returnType = 'html'): string
    {

        $client = self::getClient();
        $response = $client->images()->create([
            'prompt' => $description,
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'b64_json',
        ]);

        $image = $response->data[0]->b64_json;
        if ($returnType == 'html') {
            return '<img src="data:image/png;base64,'.$image.'" />';
        }

        return $image;
    }
}
