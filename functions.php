<?php
  function valideForm(&$method, $tabCles) {
      foreach ($tabCles as $cle) {
          if (!isset($method[$cle]))
              return FALSE;
          if (!$method[$cle])
              return FALSE;
          }
    return TRUE;
  }
?>
