<?php

/*
 * This file is part of the LightSAML-Core package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\Model\XmlDSig;

use LightSaml\Model\AbstractSamlModel;

abstract class Signature extends AbstractSamlModel
{
    /**
     * @return string
     */
    protected function getIDName()
    {
        return 'ID';
    }

    public function getCertificates()
    {
        return $this->certificates;
    }
}
