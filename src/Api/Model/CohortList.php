<?php namespace MoodleSDK\Api\Model;

use MoodleSDK\Api\ApiContext;
use MoodleSDK\Api\ModelBaseList;

class CohortList extends ModelBaseList
{

    /**
     * Fetch all cohorts
     *
     * @param ApiContext $apiContext
     * @return $this
     */
    public function all(ApiContext $apiContext)
    {
        $json = $this->apiCall($apiContext, 'core_cohort_get_cohorts', [
            'cohortids' => [
            ]
        ]);

        $this->fromJSON($json);
        return $this;
    }

    /**
     * Fetch one cohort
     *
     * @param int $cohortId
     * @param ApiContext $apiContext
     * @return $this
     */
    public function one(int $cohortId, ApiContext $apiContext)
    {
        $json = $this->apiCall($apiContext, 'core_cohort_get_cohorts', [
            'cohortids' => [$cohortId]
        ]);

        $this->fromJSON($json);
        return $this;
    }

}
