<?php

namespace ScoutElastic;

class AggregationRule
{
    public $name = "";

    /**
     * Build the aggregations payload.
     * 
     * @return array
     */
    public function buildAggregationPayload()
    {
        return null;
    }


    /**
     * Format aggregation response
     * 
     * @param array $data
     * @return array
     */
    public function format(array $response)
    {
        return $response;
    }
}
