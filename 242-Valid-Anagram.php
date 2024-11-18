class Solution {

    /**
     * @param String $palabra_uno 
     * @param String $palabra_dos
     * @return Boolean
     */
    function isAnagram($palabra_uno , $palabra_dos) {
        //paso#1
        if(strlen($palabra_uno ) !== strlen($palabra_dos)) return false;

        //paso#2
        $cantidad_palabras_uno=array();
        $cantidad_palabras_dos=array();

        //paso#3
        for($i = 0;$i < strlen($palabra_uno);$i++){
            $indice_palabra_uno=$palabra_uno[$i];
            $indice_palabra_dos=$palabra_dos[$i];

            $cantidad_palabras_uno[$indice_palabra_uno]++;
            $cantidad_palabras_dos[$indice_palabra_dos]++;
        }

        //paso#4
        foreach ($cantidad_palabras_uno as $letra => $cantidad) {
            if(!isset($cantidad_palabras_dos[$letra])) return false;
            if($cantidad_palabras_dos[$letra]!= $cantidad) return false;
        }

        //paso#5
        return true;
        
    }
}