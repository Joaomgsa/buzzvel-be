<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface PlanContract
{

    public function listPlans(string $order = 'id', string $sort = 'desc', array $columns = ['*']): Collection;
    public function findPlanById(int $id): Plan;

    public function createPlan(array $params): Plan;

    public function updatePlan(array $params): Plan;

    public function deletePlan($id): bool;
}
