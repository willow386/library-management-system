<?php
class Session {
  public static function start() {
    if (session_status() == PHP_SESSION_NONE) session_start();
  }
  public static function destroy() {
    session_destroy();
  }
}