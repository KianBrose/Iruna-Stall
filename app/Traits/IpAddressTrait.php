<?php

namespace App\Traits;

trait IpAddressTrait
{
    /**
     * Get the Location of the IP Address.
     *
     * @param string $ip          (optional)
     * @param string $purpose     (optional)
     * @param bool   $deep_detect (optional)
     *
     * @return string
     */
    public function checkIP($ip = null, $purpose = 'location', $deep_detect = true)
    {
        $output = null;
        if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
            $ip = $_SERVER['REMOTE_ADDR'];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                }
            }
        }
        $purpose = str_replace(['name', "\n", "\t", ' ', '-', '_'], null, strtolower(trim($purpose)));
        $support = ['country', 'countrycode', 'state', 'region', 'city', 'location', 'address'];
        
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdata = @json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip));
            if (@strlen(trim($ipdata->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case 'location':
                        return $this->getIpDetails($ipdata);
                        break;

                    case 'address':
                        return $this->getAddressByIP($ipdata);
                        break;

                    case 'city':
                        return $this->getCityByIP($ipdata);
                        break;

                    case 'state':
                        return $this->getStateByIP($ipdata);
                        break;

                    case 'region':
                        return $this->getRegionByIP($ipdata);
                        break;

                    case 'country':
                        return $this->getCountryByIP($ipdata);
                        break;

                    case 'countrycode':

                        return $this->getCountryCodeByIP($ipdata);
                        break;
                }
            }
        }

        return $output;
    }

    /**
     * return city name
     * 
     * @param string $ip
     */
    private function getCityByIP($ip)
    {
        return @$ip->geoplugin_city;
    }

    /**
     * return state name
     * 
     * @param string $ip
     * 
     */
    private function getStateByIP($ip)
    {
        return @$ip->geoplugin_regionName;
    }

     /**
     * return region name
     * 
     * @param string $ip
     * 
     */
    private function getRegionByIP($ip)
    {
        return @$ip->geoplugin_regionName;
    }

    /**
     * 
     * Return country name
     * 
     * @param string $ip
     */
    private function getCountryByIP($ip)
    {
        return @$ip->geoplugin_countryName;
    }

    /**
     * 
     * Return country name
     * 
     * @param string $ip
     */
    private function getCountryCodeByIP($ip)
    {
        return @$ip->geoplugin_countryCode;
    }

    /**
     * 
     * Return countryName, regionName and cityName
     * 
     */
    private function getAddressByIP($ip)
    {
        $address = [$ip->geoplugin_countryName];

        if (@strlen($ip->geoplugin_regionName) >= 1) {
            $address[] = $ip->geoplugin_regionName;
        }

        if (@strlen($ip->geoplugin_city) >= 1) {
            $address[] = $ip->geoplugin_city;
        }

        return implode(', ', array_reverse($address));
    }

    /**
     * 
     * Return everything need to know about $ip
     * 
     * @param string $ip
     */
    private function getIpDetails($ip)
    {
        $continents = $this->getAllContinents();

        return [
            'city'           => @$ip->geoplugin_city,
            'state'          => @$ip->geoplugin_regionName,
            'country'        => @$ip->geoplugin_countryName,
            'countryCode'    => @$ip->geoplugin_countryCode,
            'continent'      => @$continents[strtoupper($ip->geoplugin_continentCode)],
            'continent_code' => @$ip->geoplugin_continentCode,
            'latitude'       => @$ip->geoplugin_latitude,
            'longitude'      => @$ip->geoplugin_longitude,
            'currencyCode'   => @$ip->geoplugin_currencyCode,
            'areaCode'       => @$ip->geoplugin_areaCode,
            'dmaCode'        => @$ip->geoplugin_dmaCode,
            'region'         => @$ip->geoplugin_region,
        ];
    }

    /**
     * 
     * Return all valid continents
     * 
     */
    private function getAllContinents()
    {
        return [
            'AF' => 'Africa',
            'AN' => 'Antarctica',
            'AS' => 'Asia',
            'EU' => 'Europe',
            'OC' => 'Australia (Oceania)',
            'NA' => 'North America',
            'SA' => 'South America',
        ];
    }

    

}