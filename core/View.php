<?php

namespace app\core;

class View
{

    /**
     * Renders a view unutar zadanog layout-a.
     *
     * @param string $viewName    Ime view fajla iz /views (npr. "login")
     * @param string $layoutName  Ime layout fajla iz /views/layouts (npr. "auth")
     * @param mixed  $params      Model ili associative niz koji se izdvaja u view
     */
    public function render(string $viewName, string $layoutName, $params = null)
    {
        // Generišemo HTML sadržaj samog view-a
        $viewContent = $this->renderOnlyView($viewName, $params);
        // Generišemo HTML celog layout-a
        $layoutContent = $this->layoutContent($layoutName);
        // Ubacimo view u layout na mesto oznake
        $final = str_replace('{{ renderSection }}', $viewContent, $layoutContent);
        echo $final;
    }

    /**
     * Učitava layout fajl i vraća njegov sadržaj kao string.
     */
    protected function layoutContent(string $layout)
    {
        ob_start();
        include_once __DIR__ . "/../views/layouts/{$layout}.php";
        return ob_get_clean();
    }

    /**
     * Učitava samo view fajl i vraća njegov sadržaj kao string.
     * Izvlaka promenljive iz $params (bilo da je objekat ili array).
     */
    protected function renderOnlyView(string $view, $params)
    {
        if ($params !== null) {
            // Ako je prosleđeno nešto što nije array, stavimo pod ključ 'params'
            $extracted = is_array($params) ? $params : ['params' => $params];
            foreach ($extracted as $key => $value) {
                $$key = $value;
            }
        }

        ob_start();
        include_once __DIR__ . "/../views/{$view}.php";
        return ob_get_clean();
    }
}
