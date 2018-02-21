<?php

require_once("DbContext.php");

class Repository
{
    private static $database;

    private static function init() {
        if (self::$database == NULL) {
            self::$database = DbContext::getInstance();
        }
    }

    public static function stats() {
        $cached = FileCache::Instance()->get('charity.stats');
        if ($cached) {
            return $cached;
        }
        self::init();
        $result = self::$database->query('SELECT (SELECT COUNT(*) FROM Charity.Case) as Cases, (SELECT COUNT(*) FROM Charity.User) as Users, (SELECT COUNT(*) FROM Charity.Post) as Posts, (SELECT COUNT(*) FROM Charity.Organization) as Orgs')->first();
        FileCache::Instance()->save('charity.stats', $result, 60);
        return $result;
    }

    public static function latestUsers() {
        $cached = FileCache::Instance()->get('charity.latestUsers');
        if ($cached) {
            return $cached;
        }
        self::init();
        $result = self::$database->query('SELECT * FROM `User` ORDER BY DateJoined DESC LIMIT 10')->results();
        FileCache::Instance()->save('charity.latestUsers', $result, 60);
        return $result;
    }

    public static function latestCases() {
        $cached = FileCache::Instance()->get('charity.latestCases');
        if ($cached) {
            return $cached;
        }
        self::init();
        $result = self::$database->query('SELECT * FROM `Case` ORDER BY Case.JoinedDate DESC LIMIT 10')->results();
        FileCache::Instance()->save('charity.latestCases', $result, 60);
        return $result;
    }

    public static function latestPosts() {
        $cached = FileCache::Instance()->get('charity.latestPosts');
        if ($cached) {
            return $cached;
        }
        self::init();
        $result = self::$database->query('SELECT * FROM `Post` ORDER BY CreationDate DESC LIMIT 10')->results();
        FileCache::Instance()->save('charity.latestPosts', $result, 60);
        return $result;
    }

    public static function users() {
        $cached = FileCache::Instance()->get('charity.users');
        if ($cached) {
            return $cached;
        }
        self::init();
        $result = self::$database->query('SELECT User.*, Address.City FROM `User` INNER JOIN Address ON User.AddressID = Address.ID')->results();
        FileCache::Instance()->save('charity.users', $result, 60);
        return $result;
    }

    public static function user($id) {
        self::init();
        return self::$database->query('SELECT User.*, Address.UId as AddressId, Address.City, Address.District, Address.Building, Address.Street, Address.Appartment FROM User INNER JOIN Address ON User.ID = Address.UId WHERE User.Id = ?', array($id))->first();
    }
    
}