<?php
/**
 * @file
 * Contains \Drupal\dokk_resource\BookingInterface.
 */

namespace Drupal\dokk_resource;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a Booking entity.
 * @ingroup dokk_resource
 */
interface BookingInterface extends ContentEntityInterface, EntityOwnerInterface {

}
