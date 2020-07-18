<?php
/**
 * Date: 9/12/16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\GraphQLBundle\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Youshido\GraphQL\Parser\Ast\Query;

/**
 * Class WhitelistVoter
 * @package Youshido\GraphQLBundle\Security\Voter
 */
class WhitelistVoter extends AbstractListVoter
{

    /**
     * Perform a single access check operation on a given attribute, subject and token.
     *
     * @param string         $attribute
     * @param mixed          $subject
     * @param TokenInterface $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        /** @var $subject Query */
        return $this->isLoggedInUser($token) || $this->inList($subject->getName());
    }
}
