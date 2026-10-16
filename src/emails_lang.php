<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'System updates available';
$lang['emails_updates_available_message'] = <<<EOT
Hello,

New system updates have been detected for {site_anchor}.

These updates may include security fixes, performance improvements, or new features.
We recommend reviewing them as soon as possible.

You can review and manage the available updates from the admin dashboard:
{link}

If you have already reviewed or applied the updates, no further action is required.

This is an automated system message sent by {site_name}.
Please do not reply to this email.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Account activation';
$lang['emails_account_activation_request_message'] = <<<EOT
Hello {name},

Thank you for registering at {site_anchor}. Your account is created and must be activated before you can use it.

To activate your account click on the following link or copy-paste it in your browser:
{link}

Very kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'New activation link';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hello {name},

You have recently requested a new activation link on {site_anchor} because your account was not active.
To activate your account click on the following link or copy-paste it in your browser:
{link}

If you did not request this, no further action is required.

This action was requested from this IP address: {ip_link}.

Very kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Account activated';
$lang['emails_account_activation_success_message'] = <<<EOT
Hello {name},

Your account at {site_anchor} was successfully activated. You may now <a href="{login_url}" target="_blank" rel="noopener">log in</a> anytime you want.

Hoping you enjoy your stay, please accept our kind regards.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Account awaiting approval';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hello {name},

Thank you for joining us at {site_anchor}. Your account is created but needs approval by a site admin before being active.
We sincerely apologies for this crucial step, but it is only for security purposes.

You will receive a confirmation email as soon as your account is approved.

Hoping you enjoy your stay, please accept our kind regards.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Account approved';
$lang['emails_account_approval_success_message'] = <<<EOT
Hello {name},

Great news! Your account at {site_anchor} has just been approved.

You can now sign in and start using your account immediately:
{link}

We're happy to have you with us.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Account restored';
$lang['emails_account_restored_message'] = <<<EOT
Hello {name},

This email confirms that your account at {site_anchor} has been successfully restored.

Welcome back with us and we hope this time you will enjoy your stay.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Welcome to {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hello {name},

Most people have really long welcome email sequences after you register on their site.

Good news: we aren't most people.
But, we want to welcome you anyways, and thank you for joining us at {site_anchor}.

Hoping you enjoy your stay, please accept our kind regards.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Email change request';
$lang['emails_email_change_request_message'] = <<<EOT
Hello {name},

You are receiving this email because we received an email change request for your account on {site_anchor}.

Click on the following link or copy-paste it in your browser if you wish to proceed:
{link}

If you did not request an email change, no further action is required.

This action was requested from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Email address changed';
$lang['emails_email_change_success_message'] = <<<EOT
Hello {name},

This email confirms that your email address used on {site_anchor} has been successfully changed.

If you did not perform this action, please contact us as quick as possible to resolve this issue.

This action was performed from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Failed login alert';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hello {name},

Someone recently used wrong passwords to try to log in to your {site_name} account.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

If this was not you, do not worry, their login attempt was not successful.

If this was you and you do not remember your password, click the link below to reset it:
{reset_link}

If you have trouble logging in to your account, contact our team or request a one-click login link.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Successful login notification';
$lang['emails_login_alert_success_message'] = <<<EOT
Hello {name},

We send you this email following a successful login to your {site_name} account.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

If this was you, you can safely ignore this email.

If you did not log in, please change your password immediately to secure your account.

For any assistance, contact our support team.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Quick login link';
$lang['emails_login_magic_link_message'] = <<<EOT
Hello {name},

You requested a one-click login to your account on {site_anchor}.

Click the link below, or copy-paste it in your browser, and you will be logged in instantly:
{link}

This link will expire in 15 minutes. If you did not request this, please ignore this email.

This action was requested from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Two-factor authentication';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hello {name},

Your two-factor authentication code is: <strong>{code}</strong>

You can always disable the two-factor authentication on your account settings.

This action was performed from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Password reset request';
$lang['emails_password_change_request_message'] = <<<EOT
Hello {name},

You are receiving this email because we received a password reset request for your account on {site_anchor}.

Click on the following link or copy-paste it in your browser if you wish to proceed:
{link}

If you did not request a password reset, no further action is required.

This action was requested from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Password changed successfully';
$lang['emails_password_change_success_message'] = <<<EOT
Hello {name},

This email confirms that your password at {site_anchor} has been successfully changed. You may now <a href="{login_url}" target="_blank" rel="noopener">log in</a> using the new one.

If you did not perform this action, please contact us as quick as possible to resolve this issue.

This action was performed from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;
